<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : descriptor.proto
 */


namespace google\protobuf\DescriptorProto;

/**
 * Protobuf message : google.protobuf.DescriptorProto.ExtensionRange
 */
class ExtensionRange extends \Protobuf\AbstractMessage
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
     * start optional int32 = 1
     *
     * @var int
     */
    protected $start = null;

    /**
     * end optional int32 = 2
     *
     * @var int
     */
    protected $end = null;

    /**
     * Check if 'start' has a value
     *
     * @return bool
     */
    public function hasStart()
    {
        return $this->start !== null;
    }

    /**
     * Get 'start' value
     *
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set 'start' value
     *
     * @param int $value
     */
    public function setStart($value = null)
    {
        $this->start = $value;
    }

    /**
     * Check if 'end' has a value
     *
     * @return bool
     */
    public function hasEnd()
    {
        return $this->end !== null;
    }

    /**
     * Get 'end' value
     *
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set 'end' value
     *
     * @param int $value
     */
    public function setEnd($value = null)
    {
        $this->end = $value;
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
            'start' => null,
            'end' => null
        ], $values);

        $message->setStart($values['start']);
        $message->setEnd($values['end']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ExtensionRange',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'start',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'end',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
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

        if ($this->start !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->start);
        }

        if ($this->end !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->end);
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

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->start = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->end = $reader->readVarint($stream);

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

        if ($this->start !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start);
        }

        if ($this->end !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->end);
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
        $this->start = null;
        $this->end = null;
    }


}

