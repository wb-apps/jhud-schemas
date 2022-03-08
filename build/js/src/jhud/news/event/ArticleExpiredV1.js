// @link https://schemas.jenniferhudsonshow.com/json-schema/jhud/news/event/article-expired/1-0-0.json#
import GdbotsNcrNodeExpiredV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-expired/NodeExpiredV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class ArticleExpiredV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:jhud:news:event:article-expired:1-0-0', ArticleExpiredV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeExpiredV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(ArticleExpiredV1);
MessageResolver.register('jhud:news:event:article-expired', ArticleExpiredV1);
Object.freeze(ArticleExpiredV1);
Object.freeze(ArticleExpiredV1.prototype);
