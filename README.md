# Web-Based MCQ Quiz System

An interactive online platform designed to help students and professionals assess their knowledge in programming languages (C, Java, and Python). The system provides topic-wise multiple-choice quizzes with real-time feedback and score analysis.

---

## 📌 Project Overview
The **Web-Based MCQ Quiz System** bridges the gap between traditional learning and interactive assessments. It allows users to:
- Log in securely
- Select a programming language and topic
- Attempt dynamically generated quizzes
- Receive instant scoring and feedback
- Store scores for future reference

---

## 🚀 Features
- 🔐 **Secure Authentication** – User registration and login system
- 📚 **Three Languages Supported** – C, Java, Python
- 📝 **Topic-Wise Question Bank** – Each language has 3 topics, 10 questions each
- ⚡ **Real-Time Validation** – Immediate feedback on answers
- 💾 **Score Storage** – Results saved for later review
- 📊 **Responsive Design** – Works across devices

---

## 🛠️ Technologies Used
**Frontend**
- HTML – Page structure
- CSS – Styling and layout
- JavaScript – Quiz interactivity

**Backend**
- PHP – Server-side scripting
- MySQL – Database management

---

## 🗄️ Database Design
- **Users Table** – Stores user credentials (username, email, password)
- **Questions Table** – Stores quiz questions and options
- **Answers Table** – Stores correct answers
- **Scores Table** – Stores user scores after quiz completion

---

## 🔄 System Workflow
1. **Login Page** – User authentication (sign up / log in)
2. **Welcome Page** – Language and topic selection
3. **Quiz Page** – Dynamic question presentation
4. **Answer Processing (`next.php`)** – Compares user answers with database
5. **Result Page (`result.php`)** – Displays final score (out of 10)

---

## 👩‍💻 Team Members
- Ishika Bandopadhyay (UCSE23027) – Testing & Debugging  
- Priyanka Priyadarsani Das (UCSE23042) – Frontend Development  
- Swayam Mishra (UCSE23060) – Backend Development  
- Simran Osta (UCSE23068) – Database Design & Project Idea  

Instructor: **Dr. Chandan Misra**  
Institution: **XIM University**  
Course: **Web Technology**

---

## ⚠️ Challenges Faced
- Implementing secure authentication
- Managing database connectivity
- Randomizing questions while ensuring uniqueness
- Ensuring responsive design

---

## 🌟 Future Enhancements
- Leaderboard for top scores
- User progress tracking
- Enhanced UI/UX with animations
- Support for more programming languages and topics

---

## ✅ Conclusion
The **Web-Based MCQ Quiz System** provides an engaging and efficient way to test programming knowledge. With real-time scoring and structured quizzes, it enhances learning and makes self-assessment more interactive.

---

## 📂 How to Run
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/web-mcq-quiz-system.git
2. Import the database (user_database.sql) into MySQL.
3. Configure database connection in config.php.
4. Run the project on a local server (e.g., XAMPP, WAMP).
5. Access via http://localhost/web-mcq-quiz-system.
