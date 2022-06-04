import React, { useState, useEffect } from 'react'
import axios from 'axios'

const CrudPage = () => {
 const [posts, ssetPosts] = useState([]);
  useEffect(() => {
   axios.get('/posts')
   .then(response => ssetPosts(response.data))

  })
  const posts = posts.map((post)=>(
    <div>
      <h1>{post.title}</h1>
      <p>{post.description}</p>
    </div>
  ))
  return (
    <div>
      {posts}
    </div>
  )
}

export default CrudPage

if(document.getElementById('home')){
  ReactDOM.render(<CrudPage/>,document.getElementById('home'))
}