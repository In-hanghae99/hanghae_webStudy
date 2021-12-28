from flask import Flask, render_template, jsonify, request
app = Flask(__name__)

from pymongo import MongoClient
client = MongoClient('localhost', 27017)
db = client.alonecoding

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/detail')
def detail():
    return render_template('detail.html')

@app.route('/detail2')
def detail2():
    return render_template('detail2.html')

@app.route('/detail3')
def detail3():
    return render_template('detail3.html')

@app.route('/detail4')
def detail4():
    return render_template('detail4.html')

@app.route('/wether', methods =['POST'])
def location():
    location_receive = request.form['location_give']
    doc = {
        'loaction': location_receive
    }
    db.weather.insert_one(doc)
    return jsonify({'msg':'확인 중'})

if __name__ == '__main__':
    app.run('0.0.0.0', port=5000, debug=True)