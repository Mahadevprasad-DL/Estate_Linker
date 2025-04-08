from flask import Flask, render_template, request, jsonify
import pandas as pd
import pickle

app = Flask(__name__)

# Load the data and new model
data = pd.read_csv('final_dataset.csv')
pipe = pickle.load(open("LinearRegressionModel.pkl", 'rb'))

@app.route('/')
def index():
    # Get unique values for dropdowns
    bedrooms = sorted(data['beds'].unique())
    bathrooms = sorted(data['baths'].unique())
    sizes = sorted(data['size'].unique())
    zip_codes = sorted(data['zip_code'].unique())

    return render_template('index.html', bedrooms=bedrooms, bathrooms=bathrooms, sizes=sizes, zip_codes=zip_codes)

@app.route('/predict', methods=['POST'])
def predict():
    # Get form data
    bedrooms = request.form.get('beds')
    bathrooms = request.form.get('baths')
    size = request.form.get('size')
    zipcode = request.form.get('zip_code')

    # Create a DataFrame with the input data
    input_data = pd.DataFrame([[bedrooms, bathrooms, size, zipcode]],
                              columns=['beds', 'baths', 'size', 'zip_code'])

    print("Input Data:")
    print(input_data)

    # Convert input to appropriate types (numeric)
    input_data['beds'] = pd.to_numeric(input_data['beds'], errors='coerce')
    input_data['baths'] = pd.to_numeric(input_data['baths'], errors='coerce')
    input_data['size'] = pd.to_numeric(input_data['size'], errors='coerce')
    input_data['zip_code'] = pd.to_numeric(input_data['zip_code'], errors='coerce')

    # Handle missing or invalid values (fill with mode)
    for column in input_data.columns:
        input_data[column].fillna(data[column].mode()[0], inplace=True)

    print("Processed Input Data:")
    print(input_data)

    # Predict the price using the pipeline
    try:
        prediction = pipe.predict(input_data)[0]
    except Exception as e:
        print(f"Error during prediction: {e}")
        return jsonify({"error": "Prediction failed, please check input data"})

    return f"Price: INR {round(prediction, 2)}"

if __name__ == "__main__":
    app.run(debug=True, port=5000)
