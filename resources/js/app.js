require('./bootstrap');

require('./bootstrap')

import { createApp } from 'vue'
import BlogForm from './components/addBlogForm'
import BlogList from './components/BlogList'

const blogform = createApp({})
blogform.component('blog-form', BlogForm)
blogform.mount('#BolgForm')

const bloglist = createApp({})
bloglist.component('blog-list', BlogList)
bloglist.mount('#BolgList')