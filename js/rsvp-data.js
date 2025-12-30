document.addEventListener('DOMContentLoaded', function () {
    fetch('js/rsvp-config.json')
        .then(response => response.json())
        .then(data => {
            const form = document.getElementById('frmRsvp');
            if (form && data.formId) {
                form.action = `https://formspree.io/f/${data.formId}`;
            }

            const bindings = {
                'confChildName': data.childName,
                'confHostContact': `${data.event.hostName} - ${data.event.hostContact}`,
                'confLocation': data.event.location,
                'confVenue': data.event.venue,
                'confDeparture': data.event.departureTime,
                'confReturn': data.event.returnTime,
                'confDeadline': data.event.deadline,
                'confDressCode': data.dressCode
            };

            for (const [id, value] of Object.entries(bindings)) {
                const element = document.getElementById(id);
                if (element) {
                    element.textContent = value;
                }
            }

            document.title = `${data.childName}'s Birthday RSVP`;

            const headerElement = document.querySelector('.rsvp-header h1');
            if (headerElement) {
                headerElement.textContent = `You're invited to ${data.childName}'s Birthday`;
            }

        })
        .catch(error => console.error('Error loading RSVP config:', error));
});
