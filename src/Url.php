<?php
namespace WPA;

class Url
{
    private ?int $id = null;
    private ?string $name = null;
    private ?string $createdDT = null;

    public static function fromArray(array $urlData): Url
    {
        $name = $urlData[0];
        $createdDT = $urlData[1];
        $url = new Url();
        $url->setName($name);
        $url->setCreatedDT($createdDT);
        return $url;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getCreatedDT(): ?string
    {
        return $this->createdDT;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setModel(string $createdDT): void
    {
        $this->createdDT = $createdDT;
    }

    public function exists(): bool
    {
        return !is_null($this->getId());
    }
}
