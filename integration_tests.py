import unittest
import flask_testing
import json
from app import app
from db import *


class TestApp(flask_testing.TestCase):
    app.config['SQLALCHEMY_DATABASE_URI'] = "mysql+mysqlconnector://g8t4:g8t4rocks!!!!@g8t4-database.c49gshsb4die.us-east-2.rds.amazonaws.com:3306/spm"
    app.config['SQLALCHEMY_ENGINE_OPTIONS'] = {}
    app.config['TESTING'] = True

    def create_app(self):
        return app

    def setUp(self):
        db.create_all()

    def tearDown(self):
        db.session.remove()
        db.drop_all()

# Shaziera
class TestAdminCreateCourse(TestApp):
    def test_admin_create_course(self):
        c1 = Course(course_id='Test_Course_ID', course_name='Test_Course_Name',
                    course_desc='Test_Course_Desc')

        db.session.add(c1)
        db.session.commit()

        request_body = {
            'course_id': c1.course_id,
            'course_name': c1.course_name,
            'course_desc': c1.course_desc,
            'prerequisite_id': 'NIL'
        }

        response = self.client.post("/admin_create_course",
                                    data=json.dumps(request_body),
                                    content_type='application/json')
        self.assertEqual(response.json, {
            'course_id': 'Test_Course_ID',
            'course_name': 'Test_Course_Name',
            'course_desc': 'Test_Course_Desc',
            'prerequisite_id': 'NIL'
        })
        

# Heather
class TestAdminCreateClass(TestApp):
    def test_admin_create_class(self):
        c1 = Class(course_id='Test_Course_ID', class_id='Test_Class_ID', trainer_name='trainer_name', trainer_user_name='Test_Trainer_User_Name', class_start_datetime='2021-08-08', class_end_datetime='2021-09-10', enrolment_start_datetime='2021-01-01', enrolment_end_datetime='2021-02-02', current_class_size='0', total_class_size='10', no_of_sections='10', final_quiz_id='TEST')

        db.session.add(c1)
        db.session.commit()

        request_body = {
            "course_id": c1.course_id, 
            "class_id": c1.class_id, 
            "trainer_name": c1.trainer_name,
            "trainer_user_name": c1.trainer_user_name, 
            "class_start_datetime": c1.class_start_datetime,
            "class_end_datetime": c1.class_end_datetime,
            "enrolment_start_datetime": c1.enrolment_start_datetime,
            "enrolment_end_datetime": c1.enrolment_end_datetime,
            "current_class_size": c1.current_class_size,
            "total_class_size": c1.total_class_size,
            "no_of_sections": c1.no_of_sections,
            "final_quiz_id": c1.final_quiz_id
        }

        response = self.client.post("/admin_create_course",
                                    data=json.dumps(request_body),
                                    content_type='application/json')
        self.assertEqual(response.json, {
            "course_id": "Test_Course_ID", 
            "class_id": "Test_Class_ID", 
            "trainer_name": "trainer_name",
            "trainer_user_name": "Test_Trainer_User_Name", 
            "class_start_datetime": "2021-08-08",
            "class_end_datetime": "2021-09-10",
            "enrolment_start_datetime": "2021-01-01",
            "enrolment_end_datetime": "2021-02-02",
            "current_class_size": "0",
            "total_class_size": "10",
            "no_of_sections": "10",
            "final_quiz_id": "TEST"
        })



# Glennis
class TestLearnerSubmitEnrolmentRequest(TestApp):
    def test_learner_submit_enrolment_request(self):
        e1 = Enrolment_Request(user_name='Test_User_Name', name='name',
                    course_id='Test_Course_ID', class_id="test", status="PENDING")

        db.session.add(e1)
        db.session.commit()

        request_body = {
            "user_name": e1.user_name, 
            "name": e1.name,
            "course_id": e1.course_id,
            "class_id": e1.class_id,
            "status": e1.status
        }

        response = self.client.post("/submit_enrolment_request",
                                    data=json.dumps(request_body),
                                    content_type='application/json')
        self.assertEqual(response.json, {
            "user_name": "Test_User_Name", 
            "course_name": "name",
            "course_id": "Test_Course_ID",
            "class_id": "test",
            "status": "PENDING"
        })

# Angela
class TestAdminApproveEnrolment(TestApp):
    def test_admin_approve_enrolment(self):
        e1 = Overall_Course_Progress(user_name='Test_User_Name', name='name',
                    course_id='Test_Course_ID', class_id="test", sections_completed="0", final_quiz_grade="0.00")

        db.session.add(e1)
        db.session.commit()

        request_body = {
            "user_name": e1.user_name,
            "name": e1.name,
            "course_id": e1.course_id,
            "class_id": e1.class_id,
            "sections_completed": e1.sections_completed,
            "final_quiz_grade": e1.final_quiz_grade
        }

        response = self.client.post("/admin_approve_enrolment",
                                    data=json.dumps(request_body),
                                    content_type='application/json')
        self.assertEqual(response.json, {
            "user_name": "Test_User_Name",
            "name": "name",
            "course_id": "Test_Course_ID",
            "class_id": "test",
            "sections_completed": "0",
            "final_quiz_grade": "0.00"
        })


if __name__ == '__main__':
    unittest.main()
