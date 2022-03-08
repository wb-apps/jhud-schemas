<?php
// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/curator/event/teaser-slotting-removed/1-0-0.json#
namespace Jhud\Schemas\Curator\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Curator\Mixin\TeaserSlottingRemoved\TeaserSlottingRemovedV1 as TrinitiCuratorTeaserSlottingRemovedV1;
use Triniti\Schemas\Curator\Mixin\TeaserSlottingRemoved\TeaserSlottingRemovedV1Mixin as TrinitiCuratorTeaserSlottingRemovedV1Mixin;

final class TeaserSlottingRemovedV1 extends AbstractMessage implements
    TeaserSlottingRemoved,
    GdbotsPbjxEventV1,
    TrinitiCuratorTeaserSlottingRemovedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:jhud:curator:event:teaser-slotting-removed:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                TrinitiCuratorTeaserSlottingRemovedV1Mixin::create(),
            ]
        );
    }
}
