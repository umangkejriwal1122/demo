import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ListView;
import android.widget.Toast;

import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class Main2Activity extends AppCompatActivity {

    ListView lv;
    MyAdapter adapter;
    ArrayList<String> states;
    String url = "https://tum-auditor.000webhostapp.com/get.php";
    ArrayList<String> states_array;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        lv = findViewById(R.id.list);
        states = new ArrayList<String>();
        getData();
    }

    private void getData() {
        RequestQueue rq = Volley.newRequestQueue(Main2Activity.this);
        StringRequest sr = new StringRequest(Request.Method.GET, url, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
              //  Toast.makeText(Main2Activity.this, response, Toast.LENGTH_SHORT).show();
                try {
                    JSONObject jo = new JSONObject(response);
                    JSONArray ja =jo.getJSONArray("covid");
                    states_array = new ArrayList<String>();
                    for (int i=0;i< ja.length();i++){
                        JSONObject json_object = ja.getJSONObject(i);
                        String state_name = json_object.getString("states");
                        states_array.add(state_name);
                    }
                //    Toast.makeText(Main2Activity.this, ""+states_array, Toast.LENGTH_SHORT).show();
                    adapter = new MyAdapter(Main2Activity.this,states_array);
                    lv.setAdapter(adapter);
                } catch (JSONException e) {
                    e.printStackTrace();
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(Main2Activity.this, "Error", Toast.LENGTH_SHORT).show();
            }
        });
        sr.setShouldCache(false);
        sr.setRetryPolicy(new DefaultRetryPolicy(20*1000,
                0,DefaultRetryPolicy.DEFAULT_BACKOFF_MULT));
        rq.add(sr);
    }
}
