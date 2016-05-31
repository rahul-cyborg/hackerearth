test_cases = gets.chomp.strip.to_i

out = []

test_cases.times do 

  num = gets.chomp.strip.to_i
  n = num / 10
  n2 = num / 12
  flag = 0

  if num == 12 * n2
    out << n2
    flag = 1
  end

  (0..n).each do |i|
    temp_num = (n - i) * 12
    if num >= temp_num
      remain = num - temp_num
      (1..n).each do |k|
        temp = k * 10
        if temp == remain && flag == 0
          flag = 1
          out << n - i + k
          break;
        end
      end
    end 
  end

  out << -1 if flag == 0
end
puts out