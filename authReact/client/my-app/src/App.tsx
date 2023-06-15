import React, {FC, useContext, useEffect} from 'react';
import LoginForm from "./components/LoginForm";
import {Context} from "./index";
import {observer} from "mobx-react-lite";

const App: FC = () => {
    const {store} = useContext(Context)
    useEffect(()=>{
        if(localStorage.getItem('token')){
            store.checkAuth()
        }
    }, [])
    if(store.isLoading){
        return <div>Loading...</div>
    }
    if(!store.isAuth){
        return (<LoginForm/>)
    }
    return (
        <div>
            <h1>{store.isAuth ? `User is authorized ${store.user.email}`:'You need to authorize'}</h1>
          <button onClick={()=> store.logout()}>Logout</button>
            <div>
                <button>Get users</button>
            </div>
        </div>
    );
};

export default observer(App);