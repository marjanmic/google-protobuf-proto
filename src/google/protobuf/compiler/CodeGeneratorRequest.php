<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : plugin.proto
 */


namespace google\protobuf\compiler;

/**
 * Protobuf message : google.protobuf.compiler.CodeGeneratorRequest
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="CodeGeneratorRequest",
 *   package="google.protobuf.compiler",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="file_to_generate",
 *       tag=1,
 *       type=9,
 *       label=3
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="parameter",
 *       tag=2,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="proto_file",
 *       tag=15,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.FileDescriptorProto"
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class CodeGeneratorRequest extends \Protobuf\AbstractMessage
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
     * file_to_generate repeated string = 1
     *
     * @var \Protobuf\Collection
     */
    protected $file_to_generate = null;

    /**
     * parameter optional string = 2
     *
     * @var string
     */
    protected $parameter = null;

    /**
     * proto_file repeated message = 15
     *
     * @var \Protobuf\Collection<\google\protobuf\FileDescriptorProto>
     */
    protected $proto_file = null;

    /**
     * Check if 'file_to_generate' has a value
     *
     * @return bool
     */
    public function hasFileToGenerateList()
    {
        return $this->file_to_generate !== null;
    }

    /**
     * Get 'file_to_generate' value
     *
     * @return \Protobuf\Collection
     */
    public function getFileToGenerateList()
    {
        return $this->file_to_generate;
    }

    /**
     * Set 'file_to_generate' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setFileToGenerateList(\Protobuf\Collection $value = null)
    {
        $this->file_to_generate = $value;
    }

    /**
     * Add a new element to 'file_to_generate'
     *
     * @param string $value
     */
    public function addFileToGenerate($value)
    {
        if ($this->file_to_generate === null) {
            $this->file_to_generate = new \Protobuf\ScalarCollection();
        }

        $this->file_to_generate->add($value);
    }

    /**
     * Check if 'parameter' has a value
     *
     * @return bool
     */
    public function hasParameter()
    {
        return $this->parameter !== null;
    }

    /**
     * Get 'parameter' value
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Set 'parameter' value
     *
     * @param string $value
     */
    public function setParameter($value = null)
    {
        $this->parameter = $value;
    }

    /**
     * Check if 'proto_file' has a value
     *
     * @return bool
     */
    public function hasProtoFileList()
    {
        return $this->proto_file !== null;
    }

    /**
     * Get 'proto_file' value
     *
     * @return \Protobuf\Collection<\google\protobuf\FileDescriptorProto>
     */
    public function getProtoFileList()
    {
        return $this->proto_file;
    }

    /**
     * Set 'proto_file' value
     *
     * @param \Protobuf\Collection<\google\protobuf\FileDescriptorProto> $value
     */
    public function setProtoFileList(\Protobuf\Collection $value = null)
    {
        $this->proto_file = $value;
    }

    /**
     * Add a new element to 'proto_file'
     *
     * @param \google\protobuf\FileDescriptorProto $value
     */
    public function addProtoFile(\google\protobuf\FileDescriptorProto $value)
    {
        if ($this->proto_file === null) {
            $this->proto_file = new \Protobuf\MessageCollection();
        }

        $this->proto_file->add($value);
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
            'file_to_generate' => [],
            'parameter' => null,
            'proto_file' => []
        ], $values);

        $message->setParameter($values['parameter']);

        foreach ($values['file_to_generate'] as $item) {
            $message->addFileToGenerate($item);
        }

        foreach ($values['proto_file'] as $item) {
            $message->addProtoFile($item);
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

        if ($this->file_to_generate !== null) {
            foreach ($this->file_to_generate as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->parameter !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->parameter);
        }

        if ($this->proto_file !== null) {
            foreach ($this->proto_file as $val) {
                $writer->writeVarint($stream, 122);
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

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->file_to_generate === null) {
                    $this->file_to_generate = new \Protobuf\ScalarCollection();
                }

                $this->file_to_generate->add($reader->readString($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->parameter = $reader->readString($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\FileDescriptorProto();

                if ($this->proto_file === null) {
                    $this->proto_file = new \Protobuf\MessageCollection();
                }

                $this->proto_file->add($innerMessage);

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

        if ($this->file_to_generate !== null) {
            foreach ($this->file_to_generate as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->parameter !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->parameter);
        }

        if ($this->proto_file !== null) {
            foreach ($this->proto_file as $val) {
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
    public function clear()
    {
        $this->file_to_generate = null;
        $this->parameter = null;
        $this->proto_file = null;
    }


}

