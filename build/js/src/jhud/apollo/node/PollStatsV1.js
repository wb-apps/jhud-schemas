// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/apollo/node/poll-stats/1-0-0.json#
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloPollStatsV1Mixin from '@triniti/schemas/triniti/apollo/mixin/poll-stats/PollStatsV1Mixin';
import TrinitiApolloPollStatsV1Trait from '@triniti/schemas/triniti/apollo/mixin/poll-stats/PollStatsV1Trait';

export default class PollStatsV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:jhud:apollo:node:poll-stats:1-0-0', PollStatsV1,
      [],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiApolloPollStatsV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(PollStatsV1);
TrinitiApolloPollStatsV1Trait(PollStatsV1);
MessageResolver.register('jhud:apollo:node:poll-stats', PollStatsV1);
Object.freeze(PollStatsV1);
Object.freeze(PollStatsV1.prototype);
