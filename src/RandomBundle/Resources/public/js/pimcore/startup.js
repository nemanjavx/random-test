pimcore.registerNS("pimcore.plugin.RandomBundle");

pimcore.plugin.RandomBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.RandomBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        // alert("RandomBundle ready!");
    }
});

var RandomBundlePlugin = new pimcore.plugin.RandomBundle();
