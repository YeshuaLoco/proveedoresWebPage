(function(){!function(e,t,n){"use strict";return e.fn.slidea.touch=function(){this.settings=!0,this.load=function(){this.touch_object=new Hammer(this.element[0]),this.touch_object.get("pan").set({direction:Hammer.DIRECTION_HORIZONTAL}),this.touch_object.on("panleft panright",function(e){return function(t){t.eventType===Hammer.INPUT_START?e.element.addClass("slidea-dragging"):t.eventType!==Hammer.INPUT_END&&t.eventType!==Hammer.INPUT_CANCEL||(e.element.removeClass("slidea-dragging"),t.direction===Hammer.DIRECTION_LEFT?e.slide(e.current+1):t.direction===Hammer.DIRECTION_RIGHT&&e.slide(e.current-1))}}(this)),this.log("Bound touch pan left and right events.")}},e.slidea.register_module("touch",e.fn.slidea.touch)}(window.jQuery,window,document)}).call(this);