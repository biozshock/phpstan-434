<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Bar
{
    /**
     * @var Collection<int, Foo>
     */
    private Collection $collection;

    public function __construct()
    {
        $this->collection = new ArrayCollection();
    }

    /**
     * @return Collection<int, Foo>
     */
    function get(): Collection
    {
        $col = new ArrayCollection();
        $col->add($this->collection);

        return $col;
    }
}
