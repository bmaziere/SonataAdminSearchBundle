<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminSearchBundle\Tests\Filter;

use PHPUnit\Framework\TestCase;
use Sonata\AdminBundle\Form\Type\Filter\DateTimeType;
use Sonata\AdminSearchBundle\Filter\DateTimeFilter;

/**
 * @author Ahmet Akbana <ahmetakbana@gmail.com>
 */
class DateTimeFilterTest extends TestCase
{
    public function testGetFilterTypeClass()
    {
        $filter = new DateTimeFilter();

        $renderSettings = $filter->getRenderSettings();

        $this->assertSame(DateTimeType::class, $renderSettings[0]);
    }
}