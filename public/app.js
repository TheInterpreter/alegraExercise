/*
 * This file launches the application by asking Ext JS to create
 * and launch() the Application class.
 */
Ext.Loader.setConfig({
	enabled : true,
});

Ext.application({
    name: 'app',
    //   extend: 'app.Application',
    //   requires: [
    //      // This will automatically load all classes in the app namespace
    //      // so that application classes do not need to require each other.
    //      'app.*'
    //  ], 
    //<---- función heredada de la version superior 6.5
	controllers: ['Client'],
	autoCreateViewport: true,
});
