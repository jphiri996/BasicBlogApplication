https://github.com/jphiri996/BasicBlogApplication.git

Approach

1. Created a new branch called feature/auth-admin-panel.
2. Installed Laravel UI, generated authentication scaffolding, and set up Bootstrap by running npm      install && npm run dev.
3. Created a migration file to add the user_id column and authenticated the users.
4. Set up MongoDB.
5. Generated AdminMiddleware and implemented it.
6. Created admin routes.
7. Added the middleware to the routes.
8. Created admin controllers: AdminUserController and AdminPostController.
9. Implemented CRUD operations.
10. Attempted to create a migration file to add roles. Although the file was created successfully, the migration failed every time it was run. Therefore, I deleted the MongoDB collection and ensured it already had a column for roles.
11. Downloaded a Bootstrap dashboard example, adjusted it, and pasted it into admin.blade.php in the layouts folder.
12. Created views for listing, creating, editing, and deleting users and blog posts, and applied the Bootstrap dashboard style.

Challenges
This assignment was incredibly challenging, and at one point, I almost considered dropping the subject. Initially, I realized that despite starting the assignment, I didn’t fully understand the concepts. For the previous assignment, I managed to pass by closely following what the lecturer did, as it was similar to the task. However, this time, even after following the lectures, I realized that I didn't grasp the subject well enough.

So, I decided to rewatch all the lectures from the beginning, from Lecture 1 to Lecture 6. Along the way, I encountered issues with installations, especially when I had to upgrade from Laravel 10 to Laravel 11 based on feedback from Assignment 1. When I attempted the upgrade, nothing seemed to work. It took me quite some time to resolve this.

The reason for the delayed submission was due to me rewatching the lectures to better understand the subject. After doing so, I found the material much more manageable. What used to take me days to comprehend now became clearer, and I’m glad I revisited the content. Though it was difficult and led to a late submission, it’s the reason I decided not to drop the subject—I actually enjoy it now.

The migration file for adding roles to the user table kept failing, so I deleted the MongoDB database and created a new one with roles already added.

Step 8 was particularly hard to understand. I wasn’t sure what was meant by "update the registration process." I interpreted this to mean that admins should be allowed to register users after logging in as admins, which I implemented through a create button.

