from flask import Flask, url_for, render_template, request
app = Flask(__name__)
@app.route('/')
def home():
    return render_template('home.html')
@app.route('/services')
def services():
    return render_template('services.html')
@app.route('/portfolio')
def portfolio():
    return render_template('portfolio.html')
@app.route('/pricing')
def pricing():
    return render_template('pricing.html')
@app.route('/contact')
def contact():
    return render_template('contact.html')
if(__name__=="__main__"):
    app.run(debug=True)
