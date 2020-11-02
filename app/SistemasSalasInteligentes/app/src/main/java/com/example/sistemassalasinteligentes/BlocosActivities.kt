package com.example.sistemassalasinteligentes

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import kotlinx.android.synthetic.main.activity_blocos.*

class BlocosActivities : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_blocos)

        buttonBloco1.setOnClickListener {
            val intent = Intent(this, RoomList::class.java)
            startActivity(intent)
        }
    }
}