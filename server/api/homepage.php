<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>vAdmin</title>
  <style>
  *{
    margin:0;
    padding:0;
  }
  body{
    background: #CCD;
    background-image:url(http://localhost:8081/src/assets/bg-anim.svg);
    font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
  }
  .container{
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
    width: 400px;
    height: 400px;
    background:#EEF;
    text-align: center;
    z-index: 1;
  }
  .background{
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    z-index: -1;
  }
  .content{
    display:flex;
    flex-direction:column;
    justify-content: center;
    width: 100%;
    height: 100%;
  }
  svg{
    margin: 0 auto;
  }
  h2{
    font-weight: normal;
    margin-bottom:4px;
  }
  p{
    margin-bottom:4px;
    font-size: 12px;
    color:#666;
  }
</style>
</head>
<body>
 <div class="container">
   <div class="content">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 256 256" width="256" height="256">
      <defs>
        <clipPath id="_clipPath_eSrmIOM5SZFjFhyrVcCMZaVp4grUXabC">
          <rect width="256" height="256"/>
        </clipPath>
      </defs>
      <g clip-path="url(#_clipPath_eSrmIOM5SZFjFhyrVcCMZaVp4grUXabC)">
        <path id="gear1" d=" M 116.581 171.01 L 127.821 203.029 L 151.844 129.953 L 123.533 52.971 Q 97.375 120.951 97.375 121.417 L 116.581 171.01 Z  M 99 78.875" fill="rgb(0,0,0)"/>
        <path id="gear2" d=" M 112.936 159.93 C 110.534 161.49 107.835 162.631 104.942 163.247 L 104.942 165.93 C 104.942 167.033 104.047 167.929 102.944 167.929 L 96.949 167.929 C 95.846 167.929 94.95 167.033 94.95 165.93 L 94.95 163.247 C 92.058 162.631 89.358 161.49 86.956 159.93 L 85.055 161.832 C 84.275 162.611 83.009 162.611 82.229 161.832 L 77.99 157.592 C 77.21 156.812 77.21 155.546 77.99 154.766 L 79.891 152.865 C 78.331 150.463 77.191 147.763 76.574 144.871 L 73.891 144.871 C 72.788 144.871 71.892 143.975 71.892 142.872 L 71.892 136.877 C 71.892 135.774 72.788 134.879 73.891 134.879 L 76.574 134.879 C 77.191 131.987 78.331 129.287 79.891 126.885 L 77.99 124.984 C 77.21 124.204 77.21 122.937 77.99 122.157 L 82.229 117.918 C 83.009 117.138 84.275 117.138 85.055 117.918 L 86.956 119.82 C 89.358 118.26 92.058 117.119 94.95 116.503 L 94.95 113.82 C 94.95 112.717 95.846 111.821 96.949 111.821 L 102.944 111.821 C 104.047 111.821 104.942 112.717 104.942 113.82 L 104.942 116.503 C 107.835 117.119 110.534 118.26 112.936 119.82 L 114.838 117.918 C 115.617 117.138 116.884 117.138 117.664 117.918 L 121.903 122.157 C 122.683 122.937 122.683 124.204 121.903 124.984 L 120.001 126.885 C 121.562 129.287 122.702 131.987 123.318 134.879 L 126.002 134.879 C 127.105 134.879 128 135.774 128 136.877 L 128 142.872 C 128 143.975 127.105 144.871 126.002 144.871 L 123.318 144.871 C 122.702 147.763 121.562 150.463 120.001 152.865 L 121.903 154.766 C 122.683 155.546 122.683 156.812 121.903 157.592 L 117.664 161.832 C 116.884 162.611 115.617 162.611 114.838 161.832 L 112.936 159.93 Z  M 84.949 139.875 C 84.949 131.598 91.669 124.878 99.946 124.878 C 108.223 124.878 114.943 131.598 114.943 139.875 C 114.943 148.152 108.223 154.872 99.946 154.872 C 91.669 154.872 84.949 148.152 84.949 139.875 Z " fill-rule="evenodd" fill="rgb(255,255,255)">
          <animateTransform type="rotate" attributeName="transform" attributeType="XML" from="360 100 140" to="0 100 140"  begin="0s" dur="6s" repeatCount="indefinite"/>
        </path>
        <path id="gear3" d=" M 138.793 132.115 C 137.963 132.654 137.03 133.048 136.031 133.261 L 136.031 134.188 C 136.031 134.57 135.721 134.879 135.34 134.879 L 133.268 134.879 C 132.887 134.879 132.578 134.57 132.578 134.188 L 132.578 133.261 C 131.578 133.048 130.645 132.654 129.815 132.115 L 129.158 132.772 C 128.889 133.042 128.451 133.042 128.181 132.772 L 126.717 131.307 C 126.447 131.038 126.447 130.6 126.717 130.33 L 127.374 129.673 C 126.834 128.843 126.44 127.91 126.227 126.911 L 125.3 126.911 C 124.919 126.911 124.609 126.601 124.61 126.22 L 124.61 124.149 C 124.609 123.767 124.919 123.458 125.3 123.458 L 126.227 123.458 C 126.44 122.458 126.834 121.526 127.374 120.695 L 126.717 120.038 C 126.447 119.769 126.447 119.331 126.717 119.062 L 128.181 117.597 C 128.451 117.327 128.889 117.327 129.158 117.597 L 129.815 118.254 C 130.645 117.715 131.578 117.321 132.578 117.108 L 132.578 116.18 C 132.578 115.799 132.887 115.49 133.268 115.49 L 135.34 115.49 C 135.721 115.49 136.031 115.799 136.031 116.18 L 136.031 117.108 C 137.03 117.321 137.963 117.715 138.793 118.254 L 139.45 117.597 C 139.72 117.327 140.157 117.327 140.427 117.597 L 141.892 119.062 C 142.161 119.331 142.161 119.769 141.892 120.038 L 141.235 120.695 C 141.774 121.526 142.168 122.458 142.381 123.458 L 143.308 123.458 C 143.689 123.458 143.999 123.767 143.999 124.149 L 143.999 126.22 C 143.999 126.601 143.689 126.911 143.308 126.911 L 142.381 126.911 C 142.168 127.91 141.774 128.843 141.235 129.673 L 141.892 130.33 C 142.161 130.6 142.161 131.038 141.892 131.307 L 140.427 132.772 C 140.157 133.042 139.72 133.042 139.45 132.772 L 138.793 132.115 Z  M 129.122 125.184 C 129.122 122.324 131.444 120.002 134.304 120.002 C 137.165 120.002 139.487 122.324 139.487 125.184 C 139.487 128.045 137.165 130.367 134.304 130.367 C 131.444 130.367 129.122 128.045 129.122 125.184 Z " fill-rule="evenodd" fill="rgb(162,162,162)">
          <animateTransform type="rotate" attributeName="transform" attributeType="XML" from="0 134.3 125.2" to="360 134.3 125.2"  begin="0s" dur="3s" repeatCount="indefinite"/>
        </path>
        <path d=" M 116.381 104.736 C 116.203 104.926 116.02 105.11 115.83 105.287 L 116.315 106.128 C 116.73 106.847 116.483 107.767 115.765 108.182 L 114.042 109.177 C 113.324 109.591 112.403 109.345 111.988 108.626 L 111.505 107.789 C 111.257 107.865 111.005 107.933 110.75 107.991 L 110.75 108.958 C 110.75 109.788 110.077 110.461 109.247 110.461 L 107.258 110.461 C 106.428 110.461 105.755 109.788 105.755 108.958 L 105.755 107.991 C 105.499 107.933 105.248 107.865 105 107.789 L 104.516 108.626 C 104.102 109.345 103.181 109.591 102.463 109.177 L 100.74 108.182 C 100.022 107.767 99.775 106.847 100.19 106.128 L 100.675 105.287 C 100.485 105.11 100.302 104.926 100.124 104.736 L 99.284 105.222 C 98.565 105.637 97.645 105.39 97.23 104.672 L 96.235 102.949 C 95.82 102.231 96.067 101.31 96.786 100.895 L 97.623 100.412 C 97.547 100.164 97.479 99.912 97.421 99.657 L 96.454 99.657 C 95.624 99.657 94.95 98.984 94.95 98.154 L 94.95 96.165 C 94.95 95.335 95.624 94.661 96.454 94.661 L 97.421 94.661 C 97.479 94.406 97.547 94.155 97.623 93.907 L 96.786 93.423 C 96.067 93.008 95.82 92.088 96.235 91.369 L 97.23 89.647 C 97.645 88.928 98.565 88.682 99.284 89.097 L 100.124 89.582 C 100.302 89.392 100.485 89.208 100.675 89.031 L 100.19 88.19 C 99.775 87.472 100.022 86.551 100.74 86.137 L 102.463 85.142 C 103.181 84.727 104.102 84.974 104.516 85.693 L 105 86.529 C 105.248 86.454 105.499 86.386 105.755 86.327 L 105.755 85.361 C 105.755 84.531 106.428 83.857 107.258 83.857 L 109.247 83.857 C 110.077 83.857 110.75 84.531 110.75 85.361 L 110.75 86.327 C 111.005 86.386 111.257 86.454 111.505 86.529 L 111.988 85.693 C 112.403 84.974 113.324 84.727 114.042 85.142 L 115.765 86.137 C 116.483 86.551 116.73 87.472 116.315 88.19 L 115.83 89.031 C 116.02 89.208 116.203 89.392 116.381 89.582 L 117.221 89.097 C 117.94 88.682 118.86 88.928 119.275 89.647 L 120.27 91.369 C 120.685 92.088 120.438 93.008 119.719 93.423 L 118.882 93.907 C 118.958 94.155 119.026 94.406 119.084 94.661 L 120.051 94.661 C 120.881 94.661 121.555 95.335 121.555 96.165 L 121.555 98.154 C 121.555 98.984 120.881 99.657 120.051 99.657 L 119.084 99.657 C 119.026 99.912 118.958 100.164 118.882 100.412 L 119.719 100.895 C 120.438 101.31 120.685 102.231 120.27 102.949 L 119.275 104.672 C 118.86 105.39 117.94 105.637 117.221 105.222 L 116.381 104.736 Z  M 100.873 97.159 C 100.873 93.087 104.18 89.78 108.252 89.78 C 112.325 89.78 115.632 93.087 115.632 97.159 C 115.632 101.232 112.325 104.539 108.252 104.539 C 104.18 104.539 100.873 101.232 100.873 97.159 Z " fill-rule="evenodd" fill="rgb(255,255,255)">
          <animateTransform type="rotate" attributeName="transform" attributeType="XML" from="0 108.3 97.2" to="360 108.3 97.2"  begin="0s" dur="4s" repeatCount="indefinite"/>
        </path>
        <path d=" M 7.946 40.103 L 60.827 40.103 L 122.283 215.897 L 65.115 215.897 L 7.946 40.103 L 7.946 40.103 Z " fill="rgb(0,0,0)"/>
        <path d=" M 179.452 40.103 L 248.054 215.897 L 248.054 215.897 L 190.885 215.897 L 181.329 189.776 L 138.004 189.776 L 149.438 154.44 L 168.338 154.44 L 126.571 40.103" fill="rgb(0,0,0)"/>
      </g>
    </svg>
    <div class="infos">
      <h2>vAdmin Server</h2>
      <p>Version: <?= $version ?></p>
    </div>
  </div>
</div>
</body>
</html>