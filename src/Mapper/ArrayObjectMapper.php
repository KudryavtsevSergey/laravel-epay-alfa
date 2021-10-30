<?php

namespace Sun\EpayAlfa\Mapper;

use Sun\EpayAlfa\Dto\RequestDto\RequestDtoInterface;
use Sun\EpayAlfa\Dto\ResponseDto\ResponseDtoInterface;
use Sun\EpayAlfa\Exceptions\InternalError;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ArrayObjectMapper
{
    private Serializer $serializer;

    public function __construct()
    {
        $reflectionExtractor = new ReflectionExtractor();
        $phpDocExtractor = new PhpDocExtractor();
        $propertyTypeExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        );
        $normalizers = [
            new DateTimeNormalizer([
                DateTimeNormalizer::FORMAT_KEY => 'Y-m-dTH:i:s',
            ]),
            new ObjectNormalizer(null, null, null, $propertyTypeExtractor),
            new ArrayDenormalizer(),
        ];
        $this->serializer = new Serializer($normalizers);
    }

    public function serialize(RequestDtoInterface $model): array
    {
        try {
            return $this->serializer->normalize($model);
        } catch (ExceptionInterface $e) {
            throw new InternalError('Error normalize model to array', $e);
        }
    }

    public function deserialize(array $data, string $type): ResponseDtoInterface
    {
        try {
            return $this->serializer->denormalize($data, $type, null, [
                AbstractNormalizer::ALLOW_EXTRA_ATTRIBUTES => true,
                AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true,
            ]);
        } catch (ExceptionInterface $e) {
            throw new InternalError('Error denormalize array to model', $e);
        }
    }
}
