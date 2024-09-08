import React, { useEffect, useState } from 'react';

function App() {
  const [data, setData] = useState([]);
  const [error, setError] = useState(null);

  // データ取得用の useEffect フック
  useEffect(() => {
    // データを取得するための fetch
    fetch('http://localhost:8000/index.php')
      .then((response) => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then((data) => {
        setData(data); // データをstateにセット
      })
      .catch((error) => {
        setError(error); // エラーをstateにセット
        console.error('Error fetching data:', error);
      });
  }, []);

  if (error) {
    return <div>Error: {error.message}</div>;
  }

  return (
    <div>
      <h1>Fetched Data</h1>
      <ul>
        {data.map((item, index) => (
          <li key={index}>{JSON.stringify(item)}</li>
        ))}
      </ul>
    </div>
  );
}

export default App;
