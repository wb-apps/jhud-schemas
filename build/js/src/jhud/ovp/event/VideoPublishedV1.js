// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/ovp/event/video-published/1-0-0.json#
import GdbotsAnalyticsTrackedMessageV1Mixin from '@gdbots/schemas/gdbots/analytics/mixin/tracked-message/TrackedMessageV1Mixin';
import GdbotsEnrichmentsTimePartingV1Mixin from '@gdbots/schemas/gdbots/enrichments/mixin/time-parting/TimePartingV1Mixin';
import GdbotsEnrichmentsTimeSamplingV1Mixin from '@gdbots/schemas/gdbots/enrichments/mixin/time-sampling/TimeSamplingV1Mixin';
import GdbotsNcrNodePublishedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-published/NodePublishedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class VideoPublishedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:jhud:ovp:event:video-published:1-0-0', VideoPublishedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodePublishedV1Mixin.create(),
        GdbotsAnalyticsTrackedMessageV1Mixin.create(),
        GdbotsEnrichmentsTimePartingV1Mixin.create(),
        GdbotsEnrichmentsTimeSamplingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(VideoPublishedV1);
MessageResolver.register('jhud:ovp:event:video-published', VideoPublishedV1);
Object.freeze(VideoPublishedV1);
Object.freeze(VideoPublishedV1.prototype);