<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : descriptor.proto
 */


namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.UninterpretedOption
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="UninterpretedOption",
 *   package="google.protobuf",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="name",
 *       tag=2,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.UninterpretedOption.NamePart"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="identifier_value",
 *       tag=3,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="positive_int_value",
 *       tag=4,
 *       type=4,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="negative_int_value",
 *       tag=5,
 *       type=3,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="double_value",
 *       tag=6,
 *       type=1,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="string_value",
 *       tag=7,
 *       type=12,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="aggregate_value",
 *       tag=8,
 *       type=9,
 *       label=1
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class UninterpretedOption extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * name repeated message = 2
     *
     * @var \Protobuf\Collection<\google\protobuf\UninterpretedOption\NamePart>
     */
    protected $name = null;

    /**
     * identifier_value optional string = 3
     *
     * @var string
     */
    protected $identifier_value = null;

    /**
     * positive_int_value optional uint64 = 4
     *
     * @var int
     */
    protected $positive_int_value = null;

    /**
     * negative_int_value optional int64 = 5
     *
     * @var int
     */
    protected $negative_int_value = null;

    /**
     * double_value optional double = 6
     *
     * @var float
     */
    protected $double_value = null;

    /**
     * string_value optional bytes = 7
     *
     * @var \Protobuf\Stream
     */
    protected $string_value = null;

    /**
     * aggregate_value optional string = 8
     *
     * @var string
     */
    protected $aggregate_value = null;

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasNameList()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return \Protobuf\Collection<\google\protobuf\UninterpretedOption\NamePart>
     */
    public function getNameList()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param \Protobuf\Collection<\google\protobuf\UninterpretedOption\NamePart> $value
     */
    public function setNameList(\Protobuf\Collection $value = null)
    {
        $this->name = $value;
    }

    /**
     * Add a new element to 'name'
     *
     * @param \google\protobuf\UninterpretedOption\NamePart $value
     */
    public function addName(\google\protobuf\UninterpretedOption\NamePart $value)
    {
        if ($this->name === null) {
            $this->name = new \Protobuf\MessageCollection();
        }

        $this->name->add($value);
    }

    /**
     * Check if 'identifier_value' has a value
     *
     * @return bool
     */
    public function hasIdentifierValue()
    {
        return $this->identifier_value !== null;
    }

    /**
     * Get 'identifier_value' value
     *
     * @return string
     */
    public function getIdentifierValue()
    {
        return $this->identifier_value;
    }

    /**
     * Set 'identifier_value' value
     *
     * @param string $value
     */
    public function setIdentifierValue($value = null)
    {
        $this->identifier_value = $value;
    }

    /**
     * Check if 'positive_int_value' has a value
     *
     * @return bool
     */
    public function hasPositiveIntValue()
    {
        return $this->positive_int_value !== null;
    }

    /**
     * Get 'positive_int_value' value
     *
     * @return int
     */
    public function getPositiveIntValue()
    {
        return $this->positive_int_value;
    }

    /**
     * Set 'positive_int_value' value
     *
     * @param int $value
     */
    public function setPositiveIntValue($value = null)
    {
        $this->positive_int_value = $value;
    }

    /**
     * Check if 'negative_int_value' has a value
     *
     * @return bool
     */
    public function hasNegativeIntValue()
    {
        return $this->negative_int_value !== null;
    }

    /**
     * Get 'negative_int_value' value
     *
     * @return int
     */
    public function getNegativeIntValue()
    {
        return $this->negative_int_value;
    }

    /**
     * Set 'negative_int_value' value
     *
     * @param int $value
     */
    public function setNegativeIntValue($value = null)
    {
        $this->negative_int_value = $value;
    }

    /**
     * Check if 'double_value' has a value
     *
     * @return bool
     */
    public function hasDoubleValue()
    {
        return $this->double_value !== null;
    }

    /**
     * Get 'double_value' value
     *
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->double_value;
    }

    /**
     * Set 'double_value' value
     *
     * @param float $value
     */
    public function setDoubleValue($value = null)
    {
        $this->double_value = $value;
    }

    /**
     * Check if 'string_value' has a value
     *
     * @return bool
     */
    public function hasStringValue()
    {
        return $this->string_value !== null;
    }

    /**
     * Get 'string_value' value
     *
     * @return \Protobuf\Stream
     */
    public function getStringValue()
    {
        return $this->string_value;
    }

    /**
     * Set 'string_value' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setStringValue($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->string_value = $value;
    }

    /**
     * Check if 'aggregate_value' has a value
     *
     * @return bool
     */
    public function hasAggregateValue()
    {
        return $this->aggregate_value !== null;
    }

    /**
     * Get 'aggregate_value' value
     *
     * @return string
     */
    public function getAggregateValue()
    {
        return $this->aggregate_value;
    }

    /**
     * Set 'aggregate_value' value
     *
     * @param string $value
     */
    public function setAggregateValue($value = null)
    {
        $this->aggregate_value = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'name' => [],
            'identifier_value' => null,
            'positive_int_value' => null,
            'negative_int_value' => null,
            'double_value' => null,
            'string_value' => null,
            'aggregate_value' => null
        ], $values);

        $message->setIdentifierValue($values['identifier_value']);
        $message->setPositiveIntValue($values['positive_int_value']);
        $message->setNegativeIntValue($values['negative_int_value']);
        $message->setDoubleValue($values['double_value']);
        $message->setStringValue($values['string_value']);
        $message->setAggregateValue($values['aggregate_value']);

        foreach ($values['name'] as $item) {
            $message->addName($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->name !== null) {
            foreach ($this->name as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->identifier_value !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->identifier_value);
        }

        if ($this->positive_int_value !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->positive_int_value);
        }

        if ($this->negative_int_value !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->negative_int_value);
        }

        if ($this->double_value !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeDouble($stream, $this->double_value);
        }

        if ($this->string_value !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeByteStream($stream, $this->string_value);
        }

        if ($this->aggregate_value !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->aggregate_value);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\UninterpretedOption\NamePart();

                if ($this->name === null) {
                    $this->name = new \Protobuf\MessageCollection();
                }

                $this->name->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->identifier_value = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->positive_int_value = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->negative_int_value = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->double_value = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->string_value = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->aggregate_value = $reader->readString($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->put($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->name !== null) {
            foreach ($this->name as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->identifier_value !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->identifier_value);
        }

        if ($this->positive_int_value !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->positive_int_value);
        }

        if ($this->negative_int_value !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->negative_int_value);
        }

        if ($this->double_value !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->string_value !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->string_value);
        }

        if ($this->aggregate_value !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->aggregate_value);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->name = null;
        $this->identifier_value = null;
        $this->positive_int_value = null;
        $this->negative_int_value = null;
        $this->double_value = null;
        $this->string_value = null;
        $this->aggregate_value = null;
    }


}

