<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <base >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Insulation Zone | Login</title>
        <?php $this->load->view('header');?> 
    </head>

    <body
        class="page-template ltr"
        data-theme-color="#0068e1"
        style="--color-primary: #0068e1;
            --color-primary-hover: #0055b8;
            --color-primary-transparent: rgba(0, 104, 225, 0.8);
            --color-primary-transparent-lite: rgba(0, 104, 225, 0.3);"
    >
    <?php $this->load->view('header-menu');?> 

    <section class="custom-about">
        <div class="row">
            <div style="background: rgb(60 48 48 / 5%); height: 400px;width:100%;margin-top:1%;">
                <div mbsc-form class="dms-calendar-booking">
                    
                    <div class="mbsc-form-group">
                        <!-- <div class="mbsc-form-group-title">Booking multiple appointments</div> -->
                        <div id="demo-booking-multiple"></div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('side-footer-menu');?>
        </div>
        <?php $this->load->view('footer');?>

    <script>
         mobiscroll.settings = {
        lang: 'en',                                     // Specify language like: lang: 'pl' or omit setting to use default
        theme: 'ios',                                   // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'                           // More info about themeVariant: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-themeVariant
    };
    
    var now = new Date(),
        currYear = now.getFullYear(),
        currMonth = now.getMonth(),
        currDay = now.getDate(),
        min = new Date(currYear, currMonth, currDay),
        max = new Date(currYear, currMonth + 6, currDay),
        firstload = true;

    mobiscroll.calendar('#demo-booking-single', {
        display: 'inline',                              // Specify display mode like: display: 'bottom' or omit setting to use default
        controls: ['calendar'],                         // More info about controls: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-controls
        min: min,                                       // More info about min: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-min
        max: max,                                       // More info about max: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-max
        yearChange: false,                              // More info about yearChange: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-yearChange
        responsive: {                                   // More info about responsive: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-responsive
            small: {
                months: 1                               // More info about months: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-months
            },
            large: {
                months: 2                               // More info about months: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-months
            }
        },
        onPageLoading: function (event, inst) {         // More info about onPageLoading: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onPageLoading
            getPrices(event.firstDay, function callback(bookings) {
                inst.settings.labels = bookings.labels
                inst.settings.invalid = bookings.invalid;
                inst.redraw();
            });
        }
    });
    
    mobiscroll.calendar('#demo-booking-multiple', {
        display: 'inline',                              // Specify display mode like: display: 'bottom' or omit setting to use default
        controls: ['calendar'],                         // More info about controls: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-controls
        min: min,                                       // More info about min: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-min
        max: max,                                       // More info about max: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-max
        months: 'auto',                                 // More info about months: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-months
        yearChange: false,                              // More info about yearChange: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-yearChange
        select: 'multiple',                             // More info about select: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-select
        responsive: {                                   // More info about responsive: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-responsive
            small: {
                months: 1                               // More info about months: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-months
            },
            large: {
                months: 2                               // More info about months: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-months
            }
        },
        onInit: function (event, inst) {                // More info about onInit: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onInit
            inst.setVal([
                new Date(currYear, currMonth, currDay + 1),
                new Date(currYear, currMonth, currDay + 5),
                new Date(currYear, currMonth, currDay + 6)
            ], true);
        },
        onPageLoading: function (event, inst) {         // More info about onPageLoading: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onPageLoading
            getBookings(event.firstDay, function callback(bookings) {
                inst.settings.labels = bookings.labels
                inst.settings.invalid = bookings.invalid;
                inst.redraw();
            });
        }
    });
    
    mobiscroll.calendar('#demo-booking-recurring', {
        display: 'inline',                              // Specify display mode like: display: 'bottom' or omit setting to use default
        controls: ['calendar', 'time'],                 // More info about controls: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-controls
        min: min,                                       // More info about min: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-min
        max: max,                                       // More info about max: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-max
        labels: [],                                     // More info about labels: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-labels
        layout: 'fixed',                                // More info about layout: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-layout
        calendarWidth: 400,                             // More info about calendarWidth: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-calendarWidth
        cssClass: 'dm-calendar-booking',                // More info about cssClass: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-cssClass
        yearChange: false,                              // More info about yearChange: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-yearChange
        steps: {                                        // More info about steps: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-steps
            hour: 2,
            minute: 60
        },
        responsive: {                                   // More info about responsive: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-responsive
            xsmall: {
                calendarWidth: undefined                // More info about calendarWidth: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-calendarWidth
            },
            medium: {
                rows: 7,                                // More info about rows: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-rows
                circular: [false, false, false, true],  // More info about circular: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-circular
                calendarWidth: 400                      // More info about calendarWidth: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-calendarWidth
            }
        },
        touchUi: false,                                 // More info about touchUi: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-touchUi
        timeFormat: 'h A',                              // More info about timeFormat: https://docs.mobiscroll.com/4-10-7/javascript/calendar#localization-timeFormat
        onInit: function (event, inst) {                // More info about onInit: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onInit
            if (firstload) {
                mobiscroll.util.getJson('https://trial.mobiscroll.com/getrecbookings/', function (times) {
                    // We are loading the available spots from a remote API. The data needs to be parsed and days need to be disabled.
                    // In addition to that we'll have to display the number of available spots in lables plus update the time picker to only allow the valid selections.
                    // The approach is to invalidate all times and override (make them valid) if that time slot is available for booking. (Think basketball court for two hours)
                    var labels = [],
                        invalid = [],
                        valid = [];
    
                    for (var i = 0; i < times.length; ++i) {
                        var time = times[i];
                        // set all times to invalid
                        invalid = invalid.concat({ d: 'w' + i, start: '00:00', end: '23:59' })
    
                        for (var j = 0; j < time.length; ++j) {
                            var t = time[j];
                            // override invalid values with valids
                            valid = valid.concat({ d: 'w' + i, start: t, end: t })
                        }
    
                        if (time.length === 0) {
                            // set day to invalid if there is no selectable time on that day
                            invalid = invalid.concat('w' + [i]);
                        } else {
                            // add the number of selectable times to labels
                            labels = labels.concat({ d: 'w' + i, text: time.length + ' SPOTS', background: 'none', color: '#e1528f' });
                        }
                    }
    
                    firstload = false;
    
                    inst.option({
                        labels: labels,                 // More info about labels: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-labels
                        invalid: invalid,               // More info about invalid: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-invalid
                        valid: valid                    // More info about valid: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-valid
                    });
    
                }, 'jsonp');
            }
        },
        onDayChange: function (event, inst) {           // More info about onDayChange: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onDayChange
            inst.settings.colors = [{ d: 'w' + event.date.getDay(), background: '#e1528f' }]
            inst.redraw();
        }
    });
    
    function getPrices(d, callback) {
        var invalid = [],
            labels = [];
    
        mobiscroll.util.getJson('https://trial.mobiscroll.com/getprices/?year=' + d.getFullYear() + '&month=' + d.getMonth(), function (bookings) {
            for (var i = 0; i < bookings.length; ++i) {
                var booking = bookings[i],
                    d = new Date(booking.d);
    
                if (booking.price > 0) {
                    labels.push({
                        d: d,
                        text: '$' + booking.price,
                        background: 'none',
                        color: '#e1528f'
                    });
                } else {
                    invalid.push(d);
                }
            }
            callback({ labels: labels, invalid: invalid });
        }, 'jsonp');
    }
    
    function getBookings(d, callback) {
        var invalid = [],
            labels = [];
    
        mobiscroll.util.getJson('https://trial.mobiscroll.com/getbookings/?year=' + d.getFullYear() + '&month=' + d.getMonth(), function (bookings) {
            for (var i = 0; i < bookings.length; ++i) {
                var booking = bookings[i],
                    d = new Date(booking.d);
    
                if (booking.nr > 0) {
                    labels.push({
                        d: d,
                        text: booking.nr + ' SPOTS',
                        background: 'none',
                        color: '#e1528f'
                    });
                } else {
                    invalid.push(d);
                }
            }
            callback({ labels: labels, invalid: invalid });
        }, 'jsonp');
    }
    </script>
    </body>
</html>
