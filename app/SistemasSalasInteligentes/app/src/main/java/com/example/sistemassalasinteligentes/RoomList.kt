package com.example.sistemassalasinteligentes

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import kotlinx.android.synthetic.main.activity_room_list.*

class RoomList : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_room_list)

        val intent = Intent(this, DateTimePicker::class.java)

        button1001.setOnClickListener { startActivity(intent) }
        button1002.setOnClickListener { startActivity(intent) }
        button1003.setOnClickListener { startActivity(intent) }
        button1004.setOnClickListener { startActivity(intent) }
        button1005.setOnClickListener { startActivity(intent) }
    }
}