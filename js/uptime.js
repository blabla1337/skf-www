(function ( $ ) {
        var API_URL = "http://api.uptimerobot.com/";
        var defaultMonitorConf = {
                customUptimeRatio: "1-7"
        };

	var methods = {

                init: function($this, $setting){
                        // Clear old monitors
                        $('#' + $setting.containerId).empty();
                },

                invoke: function($setting, callback){

                        //Invoke API for all monitors
                        $.each($setting.monitorConfs, function(index, object){
                                var monitorConf = $.extend($.extend(true, {}, defaultMonitorConf), object);
                                var url = getMonitorUrl(monitorConf);

                                $.getJSON(url, function( data ) {
                                        callback($setting, index, monitorConf, data);
                                });
                        });
                },

                handleApiResponse: function($setting, index, monitorConf, data){
                        if(data.stat == "ok"){
                                var monitor = data.monitors.monitor[0];

                                drawMonitor($setting, monitor, monitorConf, index, $setting.containerId, $setting.monitorTemplateId);
                        }
                }
        };

	function drawMonitor($setting, monitor, monitorConf, index, containerId, monitorTemplateId){

                // Draw row by using template
                var template = _.template($('#' + monitorTemplateId).html());

                var row = template({ monitor : monitor, monitorConf : monitorConf });

                $('#' + containerId).append(row);
        }

	function getMonitorUrl(monitorConf){
                return API_URL + "getMonitors?format=json&noJsonCallback=1&apiKey=" +
                                monitorConf.apiKey + "&customUptimeRatio=" + monitorConf.customUptimeRatio;
        }

	$.fn.uptimeRobot = function(options){
                var $this = this;
                var $setting = $.extend({
                        monitorConfs: [{
                                apiKey: "",
                                name: "",
                        }],
                        refresh : true,
                        refreshInterval: 60
                }, options );

                function showMonitors(){
                        methods.init($this, $setting);
                        methods.invoke($setting, methods.handleApiResponse);
                }

                showMonitors();

                if(true == $setting.refresh){
                        setInterval(showMonitors, $setting.refreshInterval * 1000);
                }

        };

}( jQuery ));
