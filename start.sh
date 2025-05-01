# Navigating to client folder and start fronted.
echo "Starting client..."
cd client || exit
npm run dev &

# Navigating to server folder and start backend.
echo "Starting server..."
cd ../server || exit
composer start
