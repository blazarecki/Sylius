<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Taxonomy\Model;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Translation\Model\TranslatableInterface;
use Sylius\Component\Resource\Model\SoftDeletableInterface;

/**
 * Interface for taxons.
 *
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 * @author Gonzalo Vilaseca <gvilaseca@reiss.co.uk>
 */
interface TaxonInterface extends SoftDeletableInterface, TaxonTranslationInterface, TranslatableInterface
{
    /**
     * Get the id of taxonomy.
     *
     * @return int
     */
    public function getId();

    /**
     * Get the taxonomy.
     *
     * @return TaxonomyInterface
     */
    public function getTaxonomy();

    /**
     * Set the taxonomy.
     *
     * @param null|TaxonomyInterface $taxonomy
     */
    public function setTaxonomy(TaxonomyInterface $taxonomy = null);

    /**
     * Is root taxon?
     *
     * @return bool
     */
    public function isRoot();

    /**
     * Get parent taxon.
     *
     * @return TaxonInterface
     */
    public function getParent();

    /**
     * Set parent taxon.
     *
     * @param null|TaxonInterface $taxon
     */
    public function setParent(TaxonInterface $taxon = null);

    /**
     * Get children taxons.
     *
     * @return Collection|TaxonInterface[]
     */
    public function getChildren();

    /**
     * Has child taxon?
     *
     * @param TaxonInterface $taxon
     *
     * @return bool
     */
    public function hasChild(TaxonInterface $taxon);

    /**
     * Add child taxon.
     *
     * @param TaxonInterface $taxon
     */
    public function addChild(TaxonInterface $taxon);

    /**
     * Remove child taxon.
     *
     * @param TaxonInterface $taxon
     */
    public function removeChild(TaxonInterface $taxon);

    /**
     * Get taxon name.
     *
     * @return string
     */
    public function getName();

    /**
     * Set taxon name.
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Get permalink.
     *
     * @return string
     */
    public function getPermalink();

    /**
     * Set permalink.
     *
     * @param string $permalink
     */
    public function setPermalink($permalink);

    public function getLeft();
    public function setLeft($left);
    public function getRight();
    public function setRight($right);
    public function getLevel();
    public function setLevel($level);
}
