// const ApiService      = require( "services/ApiService" );
// const ResourceService = require( "services/ResourceService" );

Vue.component( "auction", {
    name: 'auction',
    props: [

        "isActive",
        // "template"
    ],

    data() {
        return {
            isTest: true,
            message: 'testVariable'
        };
    },

    created() {
        // this.$options.template = this.template;
    },

    ready() {
    },

    methods:
        {
        }
} );

new Vue( {
             el: '#auction',
    data: {
                 message: 'hi Oeli'
    }
         } );