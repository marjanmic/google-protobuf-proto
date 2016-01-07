<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : descriptor.proto
 */


namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.EnumOptions
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="EnumOptions",
 *   package="google.protobuf",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="allow_alias",
 *       tag=2,
 *       type=8,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="deprecated",
 *       tag=3,
 *       type=8,
 *       label=1,
 *       default="false"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="uninterpreted_option",
 *       tag=999,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.UninterpretedOption"
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class EnumOptions extends \Protobuf\AbstractMessage
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
     * allow_alias optional bool = 2
     *
     * @var bool
     */
    protected $allow_alias = null;

    /**
     * deprecated optional bool = 3
     *
     * @var bool
     */
    protected $deprecated = null;

    /**
     * uninterpreted_option repeated message = 999
     *
     * @var \Protobuf\Collection<\google\protobuf\UninterpretedOption>
     */
    protected $uninterpreted_option = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->deprecated = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'allow_alias' has a value
     *
     * @return bool
     */
    public function hasAllowAlias()
    {
        return $this->allow_alias !== null;
    }

    /**
     * Get 'allow_alias' value
     *
     * @return bool
     */
    public function getAllowAlias()
    {
        return $this->allow_alias;
    }

    /**
     * Set 'allow_alias' value
     *
     * @param bool $value
     */
    public function setAllowAlias($value = null)
    {
        $this->allow_alias = $value;
    }

    /**
     * Check if 'deprecated' has a value
     *
     * @return bool
     */
    public function hasDeprecated()
    {
        return $this->deprecated !== null;
    }

    /**
     * Get 'deprecated' value
     *
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Set 'deprecated' value
     *
     * @param bool $value
     */
    public function setDeprecated($value = null)
    {
        $this->deprecated = $value;
    }

    /**
     * Check if 'uninterpreted_option' has a value
     *
     * @return bool
     */
    public function hasUninterpretedOptionList()
    {
        return $this->uninterpreted_option !== null;
    }

    /**
     * Get 'uninterpreted_option' value
     *
     * @return \Protobuf\Collection<\google\protobuf\UninterpretedOption>
     */
    public function getUninterpretedOptionList()
    {
        return $this->uninterpreted_option;
    }

    /**
     * Set 'uninterpreted_option' value
     *
     * @param \Protobuf\Collection<\google\protobuf\UninterpretedOption> $value
     */
    public function setUninterpretedOptionList(\Protobuf\Collection $value = null)
    {
        $this->uninterpreted_option = $value;
    }

    /**
     * Add a new element to 'uninterpreted_option'
     *
     * @param \google\protobuf\UninterpretedOption $value
     */
    public function addUninterpretedOption(\google\protobuf\UninterpretedOption $value)
    {
        if ($this->uninterpreted_option === null) {
            $this->uninterpreted_option = new \Protobuf\MessageCollection();
        }

        $this->uninterpreted_option->add($value);
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

        if ($this->allow_alias !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->allow_alias);
        }

        if ($this->deprecated !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->deprecated);
        }

        if ($this->uninterpreted_option !== null) {
            foreach ($this->uninterpreted_option as $val) {
                $writer->writeVarint($stream, 7994);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->allow_alias = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->deprecated = $reader->readBool($stream);

                continue;
            }

            if ($tag === 999) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\UninterpretedOption();

                if ($this->uninterpreted_option === null) {
                    $this->uninterpreted_option = new \Protobuf\MessageCollection();
                }

                $this->uninterpreted_option->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->allow_alias !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->deprecated !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->uninterpreted_option !== null) {
            foreach ($this->uninterpreted_option as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 2;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->allow_alias = null;
        $this->deprecated = false;
        $this->uninterpreted_option = null;
    }


}

