<?php
// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/curator/command/remove-teaser-slotting/1-0-0.json#
namespace Jhud\Schemas\Curator\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Curator\Mixin\RemoveTeaserSlotting\RemoveTeaserSlottingV1 as TrinitiCuratorRemoveTeaserSlottingV1;
use Triniti\Schemas\Curator\Mixin\RemoveTeaserSlotting\RemoveTeaserSlottingV1Mixin as TrinitiCuratorRemoveTeaserSlottingV1Mixin;

final class RemoveTeaserSlottingV1 extends AbstractMessage implements
    RemoveTeaserSlotting,
    GdbotsPbjxCommandV1,
    TrinitiCuratorRemoveTeaserSlottingV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:jhud:curator:command:remove-teaser-slotting:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                TrinitiCuratorRemoveTeaserSlottingV1Mixin::create(),
            ]
        );
    }
}
