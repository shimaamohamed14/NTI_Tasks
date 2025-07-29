
/*task1 */
SELECT c.title , COUNT(e.student_id ) FROM enrollments e LEFT JOIN courses c ON c.id =e.course_id GROUP BY c.id;


/*task2*/

SELECT name FROM students WHERE id = ( SELECT student_id FROM enrollments GROUP BY student_id ORDER BY COUNT(*) ASC LIMIT 1 );

/*task3*/

SELECT name FROM students WHERE id NOT IN (SELECT student_id FROM enrollments);

/*task4*/

SELECT students.name ,COUNT(*) as total FROM enrollments JOIN students ON enrollments.student_id=students.id GROUP BY student_id;
