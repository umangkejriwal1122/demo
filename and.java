import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.TextView;
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
    ArrayList<String> states_array,con_array,death_array,rec_array,act_array;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        lv = findViewById(R.id.list);
        states = new ArrayList<String>();
        getData();
        lv.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                TextView tv = view.findViewById(R.id.textView);
                String name = tv.getText().toString();
                String confirmed = con_array.get(i);
                String recovered = rec_array.get(i);
                String deaths = death_array.get(i);
                String active = act_array.get(i);
                Toast.makeText(Main2Activity.this, confirmed, Toast.LENGTH_SHORT).show();
            }
        });
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
                    con_array = new ArrayList<String>();
                    death_array = new ArrayList<String>();
                    rec_array = new ArrayList<String>();
                    act_array = new ArrayList<String>();
                    for (int i=0;i< ja.length();i++){
                        JSONObject json_object = ja.getJSONObject(i);
                        String state_name = json_object.getString("states");
                        String c = json_object.getString("confirmed");
                        String r = json_object.getString("recovered");
                        String d = json_object.getString("deaths");
                        String a = json_object.getString("active");
                        states_array.add(state_name);
                        con_array.add(c);
                        rec_array.add(r);
                        death_array.add(d);
                        act_array.add(a);
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
