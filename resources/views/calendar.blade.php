<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight">
            Reach for us for any questions...
        </h2>
    </x-slot>

    <div class="container p-4 mx-auto overflow-auto">
        <div class="bg-white rounded-md shadow-md mx-auto py-4 px-8 w-full">
            <div id='calendar'></div>
        </div>
    </div>
    @section('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'listDay,listWeek,dayGridMonth',
                    },
                    buttonText: {
                        today: 'Today',
                        listDay: 'Today Events',
                        listWeek: 'Week Events',
                        dayGridMonth: 'Month View',
                    },
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    initialView: 'dayGridMonth',
                    editable: true,
                });
                calendar.render();
            });
        </script>
    @endsection
</x-app-layout>
