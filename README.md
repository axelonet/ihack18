# ihack 18

ihack is a online cryptic hunt conducted for 24 hours by UPES-CSI. Participation will be done individually. Participants would have to search for clues spread over the webpages to pass through the various levels and score points accordingly.

The clues maybe hidden in the HTML source code or encrypted into a song or a picture. The person who clears most levels by the end of the 24-hour mark would be declared as a winner.

Bonus points would be awarded to participants if they can come up with an idea for a level. This bonus is only available after clearing the first stage.

As the event is online, participants will be provided with their unique id and passwords through email and their scores will be regularly updated with their id. Participants need to provide their valid email address so that the id and passwords can be easily availed to them.

**Event head:**

Aditya Pudipeddi


**Organizers:**

Harsh Joshi

Priyanka Yadav		      

Lakshika Parihar

### To-do:
- [x] Sidebar
- [ ] Front page
- [ ] Login form macro
- [ ] Profile Page retouch
- [ ] Backend

## Notes

As we progress in the development process of creating this website, let me make this documentation here to give you an idea of why I did the things that I did.

As you can see, all the code has been divided into individual PHP files for the sake of modularity and indexing. You can find all the individual modules of code inside the [includes](includes) folder.

Also, [protected ](includes/protected) folder  inside includes [includes](includes) has the modules that can only be accessed once the user has logged in.

The main advantage of writing code in PHP is that it being server-sided, end user will not be affected in any way by the number of modules you use to achieve the final result you want.
