/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link https://schemas.jenniferhudsonshow.com/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver.js';
import messages from './manifests/messages.js';

MessageResolver.register(messages);
MessageResolver.setDefaultVendor('jhud');
MessageResolver.setManifestResolver(file => import(`./manifests/${file}.js`))

export default MessageResolver;