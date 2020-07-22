@extends('layouts.base')

@section('customCSS')
    <link href="{{ asset('calendar/css/tui-calendar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('calendar/css/tui-date-picker.css') }}" rel="stylesheet"/>
    <link href="{{ asset('calendar/css/tui-time-picker.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="container" style="opacity: 90%;">
    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="container theme-showcase">
            <h1>Calendrier</h1>
<!--            calndar control buttons            -->
            <div id="" class="row">
                <span id="menu-navi">
                    
                    <button type="button" class="btn btn-default btn-sm move-today" data-action="move-today">Today</button>
                    
                    <button type="button" class="btn btn-default btn-sm move-day" data-action="move-prev">
                        <span class="calendar-icon ic-arrow-line-left" data-action="move-prev">prev</span>
                    </button>
                    <button type="button" class="btn btn-default btn-sm move-day" data-action="move-next">
                        <span class="calendar-icon ic-arrow-line-right" data-action="move-next">next</span>
                    </button>
                </span>
                <span id="renderRange" class="render-range"></span>
            </div>
            
            <div id="calendar" class="container" ></div>
        </div>
    </div>
</div>
@endsection


@section('customJS')
    
<script src="{{ asset('calendar/js/tui-code-snippet.js') }}"></script>
<script src="{{ asset('calendar/js/tui-dom.js') }}"></script>
<script src="{{ asset('calendar/js/tui-time-picker.min.js') }}"></script>
<script src="{{ asset('calendar/js/tui-date-picker.min.js') }}"></script>
<script src="{{ asset('calendar/js/tui-calendar.js') }}"></script>
<script src="{{ asset('js/moment-with-locales.js') }}"></script>

<script>

const templates = {
    popupIsAllDay: function() {
      return 'All Day';
    },
    popupStateFree: function() {
      return 'Free';
    },
    popupStateBusy: function() {
      return 'Busy';
    },
    titlePlaceholder: function() {
      return 'Subject';
    },
    locationPlaceholder: function() {
      return 'Location';
    },
    startDatePlaceholder: function() {
      return 'Start date';
    },
    endDatePlaceholder: function() {
      return 'End date';
    },
    popupSave: function() {
      return 'Save';
    },
    popupUpdate: function() {
      return 'Update';
    },
    popupDetailDate: function(isAllDay, start, end) {
      console.log("date start pop", start)
      console.log("date end pop", end)
      return 'De : ' + start._date.toLocaleDateString() + ' à ' + end._date.toLocaleDateString()
    },
    // popupDetailDate: function(isAllDay, start, end) {
    //   console.log("date start pop", start)
    //   console.log("date end pop", end)
    //   var isSameDate = moment(start).isSame(end);
    //   var endFormat = (isSameDate ? '' : 'YYYY.MM.DD ') + 'hh:mm a';

    //   if (isAllDay) {
    //     return moment(start).format('YYYY.MM.DD') + (isSameDate ? '' : ' - ' + moment(end).format('YYYY.MM.DD'));
    //   }

    //   return (moment(start).format('YYYY.MM.DD hh:mm a') + ' - ' + moment(end).format(endFormat));
    // },
    popupDetailLocation: function(schedule) {
      return 'Location : ' + schedule.location;
    },
    popupDetailUser: function(schedule) {
      return 'User : ' + (schedule.attendees || []).join(', ');
    },
    popupDetailState: function(schedule) {
      return 'State : ' + schedule.state || 'Busy';
    },
    popupDetailRepeat: function(schedule) {
      return 'Repeat : ' + schedule.recurrenceRule;
    },
    popupDetailBody: function(schedule) {
      return 'Responsable : ' + '<i style="font-weight: bold">' + schedule.body + '</i>';
    },
    popupEdit: function() {
      return 'Edit';
    },
    popupDelete: function() {
      return 'Delete';
    }
  };





    var cal = new tui.Calendar('#calendar', {
    defaultView: 'month',
    template: templates,
    taskView: ['task'],
    // useCreationPopup: true,
    useDetailPopup: true,
    timezones: [{
        timezoneOffset: 540,
        // displayLabel: 'GMT+09:00',
        tooltip: 'Seoul'
    }, {
        timezoneOffset: -420,
        // displayLabel: 'GMT-08:00',
        tooltip: 'Los Angeles'
    }],
    week: {
        showTimezoneCollapseButton: true,
        timezonesCollapsed: false
    }
});

$.ajax({
  type: "GET",
  url: "api/taches/liste",
  success: function(data){
    var dataAray = $.parseJSON(data);
    console.log('Task', dataAray)
    var schedule = []
    $.each(dataAray, function(i, val){
      console.log('momentJs test', moment(val.date_debut).format())
      let d1 = new Date(val.date_debut);
      let d2 = new Date(val.date_fin);
      let single = {
        id: val.id,
        calendarId: '1',
        title: val.libelle,
        body: val.responsable.nom,
        location: "Douala",
        category: 'time',
        dueDateClass: '',
        start: moment(val.date_debut).format(),
        end: moment(val.date_fin).format(),
        isReadOnly: true
      }

      schedule.push(single);
      cal.createSchedules([single]);
    })
    console.log('schedule', schedule)
    
  }
})

// 2019-12-18T22:30:00+09:00

cal.on({
    // 'clickSchedule': function(e) {
    //     console.log('clickSchedule', e);
    //     var schedule = event.schedule;

    //     // focus the schedule
    //     if (lastClickSchedule) {
    //         cal.updateSchedule(lastClickSchedule.id, lastClickSchedule.calendarId, {
    //             isFocused: false
    //         });
    //     }
    //     cal.updateSchedule(schedule.id, schedule.calendarId, {
    //         isFocused: true
    //     });

    //     lastClickSchedule = schedule;
    // },
    'beforeCreateSchedule': function(event) {
        console.log('beforeCreateSchedule', event);
        // var startTime = event.start;
        // var endTime = event.end;
        // var isAllDay = event.isAllDay;
        // var guide = event.guide;
        // var triggerEventName = event.triggerEventName;
        // var schedule =
        // {
        //     id: '2',
        //     calendarId: '1',
        //     title: 'Second',
        //     category: 'time',
        //     dueDateClass: '',
        //     start: '2019-11-08T22:30:00+09:00',
        //     end: '2019-11-17T02:30:00+09:00'
        // };

        // if (triggerEventName === 'click') {
        //     // open writing simple schedule popup
        //     schedule
        // } else if (triggerEventName === 'dblclick') {
        //     // open writing detail schedule popup
        //     schedule
        // }

        // cal.createSchedules([schedule]);
        // open a creation popup

        // If you dont' want to show any popup, just use `e.guide.clearGuideElement()`

        // then close guide element(blue box from dragging or clicking days)
        // event.guide.clearGuideElement();
    },
    'beforeUpdateSchedule': function(e) {
        console.log('beforeUpdateSchedule', e);
        e.schedule.start = e.start;
        e.schedule.end = e.end;
        cal.updateSchedule(e.schedule.id, e.schedule.calendarId, e.schedule);
    },
    'beforeDeleteSchedule': function(e) {
        console.log('beforeDeleteSchedule', e);
        cal.deleteSchedule(e.schedule.id, e.schedule.calendarId);
    }
});
</script>

@endsection