var notificationsWrapper = $('.container darker');
//var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
//var notificationsCountElem = notificationsToggle.find('span[data-count]');
//var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = notificationsWrapper.find('p');

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('mychat');
// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\new_chat', function (data) {
    var existingNotifications = notifications.html();
    var newNotificationHtml = `<div class="container darker"><p>` + data + ` </p> </div>`;
    notifications.html(newNotificationHtml + existingNotifications);
    
});
