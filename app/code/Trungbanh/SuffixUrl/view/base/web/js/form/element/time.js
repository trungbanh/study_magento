define(["Magento_Ui/js/form/element/abstract"], function (AbstractElement) {
    "use strict";

    return AbstractElement.extend({
        defaults: {
            elementTmpl: "Trungbanh_SuffixUrl/form/time",
        },

        initialize: function () {
            this._super();

            this.hours = "00";
            this.minutes = "00";

            this.observe(["hours", "minutes"]);

            var value = this.value();

            this.hours(value.slice(0, 2));
            this.minutes(value.slice(2));
        },

        userChanges: function () {
          this._super();
          
          console.log("this.hours() :>> ", this.hours());
          console.log("this.minutes to 00 :>> ");
          this.minutes("33");
          console.log('this.minutes :>> ', this.minutes());
          this.value(this.hours() + this.minutes());
        },

        hoursOpts: (function () {
            var opts = [];

            for (var i = 0; i < 24; i++) {
                opts.push({
                    label: i.toString(),
                    value: ("0" + i).slice(-2),
                });
            }

            return opts;
        })(),

        minutesOpts: (function () {
            var opts = [];

            for (var i = 0; i < 60; i++) {
                opts.push({
                    label: ("0" + i).slice(-2),
                    value: ("0" + i).slice(-2),
                });
            }

            return opts;
        })(),
    });
});
