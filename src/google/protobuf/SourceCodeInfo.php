<?php
/**
 * Generated by Protobuf protoc plugin.
 */


namespace google\protobuf;

/**
 * Protobuf message : SourceCodeInfo
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="SourceCodeInfo",
 *   package="google.protobuf",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="location",
 *       tag=1,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.SourceCodeInfo.Location"
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class SourceCodeInfo extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * location repeated message = 1
     *
     * @var \Doctrine\Common\Collections\Collection<"\google\protobuf\SourceCodeInfo\Location">
     */
    protected $location = null;

    /**
     * Check if 'location' has a value
     *
     * @return bool
     */
    public function hasLocationList()
    {
        return $this->location !== null;
    }

    /**
     * Get 'location' value
     *
     * @return \Doctrine\Common\Collections\Collection<"\google\protobuf\SourceCodeInfo\Location">
     */
    public function getLocationList()
    {
        return $this->location;
    }

    /**
     * Set 'location' value
     *
     * @param \Doctrine\Common\Collections\Collection<"\google\protobuf\SourceCodeInfo\Location"> $value
     */
    public function setLocationList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->location = $value;
    }

    /**
     * Add a new element to 'location'
     *
     * @param \google\protobuf\SourceCodeInfo\Location $value
     */
    public function addLocation(\google\protobuf\SourceCodeInfo\Location $value)
    {
        $this->location[] = $value;
    }

    /**
     * Get unknown values
     *
     * @return \Protobuf\UnknownFieldSet
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Protobuf\ExtensionFieldMap
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\ExtensionFieldMap(self::CLASS);
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->location !== null) {
            foreach ($this->location as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\SourceCodeInfo\Location();

                if ($this->location === null) {
                    $this->location = new \Protobuf\MessageCollection();
                }

                $this->location->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(self::CLASS, $tag) : null;

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
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->location !== null) {
            foreach ($this->location as $val) {
                $writer->writeVarint($stream, 10);
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
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createReadContext($stream);
        $message = new \google\protobuf\SourceCodeInfo();

        $message->readFrom($context);

        return $message;
    }


}

