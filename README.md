# Platalog

 1. Run npm install.
 
 2. Go to node_modules/react-native-root-siblings/lib/AppRegistryInjection.js.
 
 3. Remove import EventEmitter from 'react-native/Libraries/EventEmitter/EventEmitter';
 
 4. Add import EventEmitter from 'react-native/Libraries/vendor/emitter/EventEmitter';
 
 5. Run react-native run-ios into root directory.
