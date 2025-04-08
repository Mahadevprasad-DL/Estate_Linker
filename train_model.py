import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
import pickle

# Load the dataset
data = pd.read_csv('final_dataset.csv')

# Define features and target (assuming 'price' is the target)
X = data[['beds', 'baths', 'size', 'zip_code']]
y = data['price']  # Assuming 'price' is the target variable

# Handle missing values
X['beds'] = X['beds'].fillna(X['beds'].mode()[0])
X['baths'] = X['baths'].fillna(X['baths'].mode()[0])
X['size'] = X['size'].fillna(X['size'].mode()[0])
X['zip_code'] = X['zip_code'].fillna(X['zip_code'].mode()[0])

# Split the dataset into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Train a simple linear regression model
model = LinearRegression()
model.fit(X_train, y_train)

# Save the trained model
with open('LinearRegressionModel.pkl', 'wb') as f:
    pickle.dump(model, f)

print("Model training complete. Model saved as LinearRegressionModel.pkl.")
