<!-- Cal element-click embed code begins -->
<script type="text/javascript">
    (function(C, A, L) {
        let p = function(a, ar) {
            a.q.push(ar);
        };
        let d = C.document;
        C.Cal = C.Cal || function() {
            let cal = C.Cal;
            let ar = arguments;
            if (!cal.loaded) {
                cal.ns = {};
                cal.q = cal.q || [];
                d.head.appendChild(d.createElement("script")).src = A;
                cal.loaded = true;
            }
            if (ar[0] === L) {
                const api = function() {
                    p(api, arguments);
                };
                const namespace = ar[1];
                api.q = api.q || [];
                if (typeof namespace === "string") {
                    cal.ns[namespace] = cal.ns[namespace] || api;
                    p(cal.ns[namespace], ar);
                    p(cal, ["initNamespace", namespace]);
                } else p(cal, ar);
                return;
            }
            p(cal, ar);
        };
    })(window, "https://app.cal.com/embed/embed.js", "init");
    Cal("init", "izrabotka-website", {
        origin: "https://app.cal.com",
        locale: 'bg'
    });


    // Important: Please add the following attributes to the element that should trigger the calendar to open upon clicking.
    // `data-cal-link="lyubomir-stoyanov-jzm3o7/izrabotka-website"`
    // data-cal-namespace="izrabotka-website"
    // `data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}'`

    Cal.ns["izrabotka-website"]("ui", {
        "hideEventTypeDetails": false,
        "layout": "month_view"
    });
</script>
<!-- Cal element-click embed code ends -->
<a
data-cal-link="lyubomir-stoyanov-jzm3o7/izrabotka-website"
data-cal-namespace="izrabotka-website"
data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}'
class="btn-default cursor-pointer d-block w-fit m-0-auto">

    Запази Безплатна консултация
    <i class="fa-solid fa-calendar-days"></i>
</a>
