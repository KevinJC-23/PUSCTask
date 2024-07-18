from flask import Flask, request, jsonify
from flask_mail import Mail, Message
import os
import datetime

app = Flask(__name__)

app.config['MAIL_SERVER'] = 'smtp.gmail.com'
app.config['MAIL_PORT'] = 465
app.config['MAIL_USERNAME'] = 'kevinjuancarlos7@gmail.com'
app.config['MAIL_PASSWORD'] = os.environ.get('PASSWORD')
app.config['MAIL_USE_TLS'] = False
app.config['MAIL_USE_SSL'] = True

mail = Mail(app)

@app.route('/send-reminder', methods=['POST'])
def send_reminder():
    data = request.get_json()
    due_date = datetime.datetime.strptime(data['due_date'], '%Y-%m-%d')
    if due_date - datetime.datetime.now() <= datetime.timedelta(days=1):
        msg = Message('Task Due Reminder', sender='admin@gmail.com', recipients=[data['email']])
        msg.body = f"Reminder: Your task '{data['title']}' is due on {data['due_date']}."
        mail.send(msg)
        return jsonify({'message': 'Reminder sent!'}), 200
    return jsonify({'message': 'No reminders needed yet.'}), 200

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')