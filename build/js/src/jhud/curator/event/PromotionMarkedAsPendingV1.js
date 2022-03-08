// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/curator/event/promotion-marked-as-pending/1-0-0.json#
import GdbotsNcrNodeMarkedAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-marked-as-pending/NodeMarkedAsPendingV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class PromotionMarkedAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:jhud:curator:event:promotion-marked-as-pending:1-0-0', PromotionMarkedAsPendingV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeMarkedAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PromotionMarkedAsPendingV1);
MessageResolver.register('jhud:curator:event:promotion-marked-as-pending', PromotionMarkedAsPendingV1);
Object.freeze(PromotionMarkedAsPendingV1);
Object.freeze(PromotionMarkedAsPendingV1.prototype);
