<?php

/**
 * Created by PhpStorm.
 * User: erwan
 * Date: 5/25/16
 * Time: 10:14 AM.
 */

namespace AppBundle\Entity\Term;

use Doctrine\ORM\Mapping as ORM;
use Sygefor\Bundle\CoreBundle\Entity\Term\AbstractTerm;
use Sygefor\Bundle\CoreBundle\Entity\Term\VocabularyInterface;

/**
 * Type de personnel.
 *
 * @ORM\Table(name="public_type")
 * @ORM\Entity
 */
class PublicType extends AbstractTerm implements VocabularyInterface
{
    /**
     * @return string
     */
    public function getVocabularyName()
    {
        return 'Type de personnel';
    }

    public static function getVocabularyStatus()
    {
        return VocabularyInterface::VOCABULARY_NATIONAL;
    }
}
