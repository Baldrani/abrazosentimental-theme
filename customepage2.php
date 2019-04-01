<?php /* Template Name: CustomPageImageLeft2 */ ?>

<?php get_header(); ?>
<script src="https://uicdn.toast.com/tui.code-snippet/latest/tui-code-snippet.js"></script>
<script src="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.js"></script>
<link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.css" />
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <?php get_template_part( 'content', 'page' ); ?>

        <?php
        endwhile; // end of the loop.
        ?>

        <div id="calendar" style="height: 800px;"></div>

        <script>
            var Calendar = tui.Calendar;
            var calendar = new Calendar('#calendar', {
                defaultView: 'month',
                taskView: true,
                template: {
                    monthGridHeader: function(model) {
                        var date = new Date(model.date);
                        var template = '<span class="tui-full-calendar-weekday-grid-date">' + date.getDate() + '</span>';
                        return template;
                    }
                }
            });

            calendar.createSchedules([
                {
                    id: '1',
                    calendarId: '1',
                    title: 'my schedule',
                    category: 'time',
                    dueDateClass: '',
                    start: '2018-01-18T22:30:00+09:00',
                    end: '2018-01-19T02:30:00+09:00'
                },
                {
                    id: '2',
                    calendarId: '1',
                    title: 'second schedule',
                    category: 'time',
                    dueDateClass: '',
                    start: '2018-01-18T17:30:00+09:00',
                    end: '2018-01-19T17:31:00+09:00',
                    isReadOnly: true    // schedule is read-only
                }
            ]);
        </script>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

