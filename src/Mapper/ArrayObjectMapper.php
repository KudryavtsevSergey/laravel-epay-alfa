<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Mapper;

use Sun\EpayAlfa\Dto\RequestDto\RequestDtoInterface;
use Sun\EpayAlfa\Dto\ResponseDto\ResponseDtoInterface;
use Sun\EpayAlfa\Exceptions\InternalError;
use Symfony\Component\PropertyInfo\Extractor\ConstructorExtractor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
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
        $phpDocExtractor = new PhpDocExtractor();
        $extractor = new PropertyInfoExtractor(
            typeExtractors: [new ConstructorExtractor([$phpDocExtractor]), $phpDocExtractor]
        );
        $normalizers = [
            new DateTimeNormalizer([
                DateTimeNormalizer::FORMAT_KEY => 'Y-m-dTH:i:s',
            ]),
            new ObjectNormalizer(
                propertyTypeExtractor: $extractor
            ),
            new ArrayDenormalizer(),
        ];
        $this->serializer = new Serializer($normalizers);
    }

    public function serialize(RequestDtoInterface $model): array
    {
        try {
            $data = $this->serializer->normalize($model);
            if (!is_array($data)) {
                throw new InternalError('Model was not normalized');
            }
            return $data;
        } catch (ExceptionInterface $e) {
            throw new InternalError('Error normalize model to array', $e);
        }
    }

    /**
     * @template T of ResponseDtoInterface
     * @param array $data
     * @param class-string<T> $type
     * @return T
     */
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
