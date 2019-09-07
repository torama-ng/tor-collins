Objects or tables
user
  id
  fname
  lname
    role_id (table role with id, name (candidate, employer))
  company_id (nullable) - refers to compan table (id, name, phone,email, site, social_fb, social_tw, social_ln,logo)
  email
  phone
  address
  avatar

  Company table
         (nullable) - refers to compan table (id, name, phone,email, site, social_fb, social_tw, social_ln,logo)

Role Table
     id, name (employer and candidate)

Job_category Table
id
categ_name

Job Table
  id
  title
  description (text field to paste details)
  job_category_id
  company_id
  user_id (hidden and automatic)
  attachment (pdf or word file describing the job)

Resume Table
   id
   user_id
   title
   details (text field to paste the entire resume)
   attachment (pdf, doc)

     
Relationships
An Employer (user with role employer) can belong to just one company
An employer can post zero or more jobs. A job can belong to one employer
An employer can search all resumes and all jobs

A company can have many employers

A candidate does not belong to a company yet but a candidate can post zero or more resumes
A candidate can search all jobs but no resumes
A guest (not registered user) user can search all jobs but not create jobs. Can not create resume

Forms
1.  User Registration Form has radio for Role (compulsary)
2.  Employer roles shows company field in form